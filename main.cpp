#include <opencv2/opencv.hpp>
#include <iostream>
#include <cfloat>
#include <algorithm>
#include <cstdlib>

using namespace cv;
using namespace std;

// Return sum of rectangle [x1..x2], [y1..y2] using integral image
// integral image has size (rows+1) x (columns+1)
double rectSum(const Mat& sat, int x1, int y1, int x2, int y2) {
    return sat.at<double>(y2 + 1, x2 + 1)
        - sat.at<double>(y1, x2 + 1)
        - sat.at<double>(y2 + 1, x1)
        + sat.at<double>(y1, x1);
}

int main(int argc, char** argv) {
    if (argc != 4) {
        cout << "Usage: " << argv[0] << " input.jpg output.jpg kernel_size\n";
        return 1;
    }

    string inputFile = argv[1];
    string outputFile = argv[2];
    int k = atoi(argv[3]);

    // It requires odd neighbourhood sizes >= 3
    if (k < 3 || k % 2 == 0) {
        cout << "Error: kernel_size must be an odd number >= 3.\n";
        return 1;
    }
    

    Mat input = imread(inputFile, IMREAD_GRAYSCALE);
    if (input.empty()) {
        cout << "Error: could not open input image: " << inputFile << "\n";
        return 1;
    }

    Mat output(input.rows, input.cols, CV_8U);

    // Building two summed area tables: 1) sum of pixel values & 2) sum of squared pixel values
    Mat sat, satSq;
    integral(input, sat, satSq, CV_64F, CV_64F);

    int r = k / 2;

    for (int y = 0; y < input.rows; y++) {
        for (int x = 0; x < input.cols; x++) {

            double minVar = DBL_MAX;
            double bestMean = 0.0;

            // 4 sub-windows which are top-left, top-right, bottom-left, bottom-right
            for (int region = 0; region < 4; region++) {
                int x1, y1, x2, y2;

                switch (region) {
                case 0: // top-left
                    x1 = x - r; y1 = y - r;
                    x2 = x;     y2 = y;
                    break;

                case 1: // top-right
                    x1 = x;     y1 = y - r;
                    x2 = x + r; y2 = y;
                    break;

                case 2: // bottom-left
                    x1 = x - r; y1 = y;
                    x2 = x;     y2 = y + r;
                    break;

                default: // bottom-right
                    x1 = x;     y1 = y;
                    x2 = x + r; y2 = y + r;
                    break;
                }

                // Ignoring neighbours outside the image
                x1 = max(0, x1);
                y1 = max(0, y1);
                x2 = min(input.cols - 1, x2);
                y2 = min(input.rows - 1, y2);

                int area = (x2 - x1 + 1) * (y2 - y1 + 1);
                if (area <= 0) {
                    continue;
                }

                double sum = rectSum(sat, x1, y1, x2, y2);
                double sumSq = rectSum(satSq, x1, y1, x2, y2);

                double mean = sum / area;
                double var = (sumSq / area) - (mean * mean);

                if (var < minVar) {
                    minVar = var;
                    bestMean = mean;
                }
            }

            output.at<uchar>(y, x) = saturate_cast<uchar>(bestMean);
        }
    }

    if (!imwrite(outputFile, output)) {
        cout << "Error: could not write output image: " << outputFile << "\n";
        return 1;
    }

    cout << "Process Done. Saved filtered image to: " << outputFile << "\n";
    return 0;
}