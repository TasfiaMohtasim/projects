import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import javax.imageio.ImageIO;
import javax.swing.*;
import org.apache.commons.io.FileUtils;

/**
 * Created by TASFIA on 8/7/2016.
 */

public class Form extends JFrame {


    private JMenu ExitMenu;
    private JMenu FileMenu;
    private JMenuItem NewMenuItem;
    private JMenuItem SaveMenuItem;
    private JRadioButton bmpRadioButton;
    private JButton browseButton;
    private ButtonGroup buttonGroup1;
    private JButton convertButton;
    private JRadioButton gifRadioButton;
    private JLabel jLabel1;
    private JPanel jPanel1;
    private JPanel jPanel3;
    private JTextField jTextField1;
    private JRadioButton jpgRadioButton;
    private Label label1;
    private Label label2;
    private JMenuBar menuBar;
    private JFileChooser openFileChooser;
    private JRadioButton pngRadioButton;
    private JFileChooser saveFileChooser;
    private JRadioButton tifRadioButton;

    public Form() {
        initComponents();
    }



    private void initComponents() {

        buttonGroup1 = new ButtonGroup();
        openFileChooser = new JFileChooser();
        saveFileChooser = new JFileChooser();
        jPanel1 = new JPanel();
        browseButton = new JButton();
        jTextField1 = new JTextField();
        convertButton = new JButton();
        bmpRadioButton = new JRadioButton();
        pngRadioButton = new JRadioButton();
        label1 = new Label();
        label2 = new Label();
        jpgRadioButton = new JRadioButton();
        tifRadioButton = new JRadioButton();
        gifRadioButton = new JRadioButton();
        jPanel3 = new JPanel();
        jLabel1 = new JLabel();
        menuBar = new JMenuBar();
        FileMenu = new JMenu();
        NewMenuItem = new JMenuItem();
        SaveMenuItem = new JMenuItem();
        ExitMenu = new JMenu();

        buttonGroup1.add(bmpRadioButton);
        buttonGroup1.add(pngRadioButton);
        buttonGroup1.add(jpgRadioButton);
        buttonGroup1.add(gifRadioButton);
        buttonGroup1.add(tifRadioButton);

        openFileChooser.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent evt) {
                openFileChooserActionPerformed(evt);
            }
        });

        saveFileChooser.setDialogType(JFileChooser.SAVE_DIALOG);

        setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);
        setBackground(new java.awt.Color(255, 255, 255));
        setCursor(new Cursor(Cursor.DEFAULT_CURSOR));
        setResizable(false);

        browseButton.setText("Browse");
        browseButton.addActionListener(new ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                browseButtonActionPerformed(evt);
            }
        });

        convertButton.setFont(new java.awt.Font("Calibri", 0, 18)); // NOI18N
        convertButton.setText("CONVERT");
        convertButton.addActionListener(new ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                convertButtonActionPerformed(evt);
            }
        });

        bmpRadioButton.setText("bmp");

        pngRadioButton.setText("png");

        label1.setFont(new Font("Calibri", 1, 36)); // NOI18N
        label1.setText("Image Convertor");

        label2.setText("Convert To");

        jpgRadioButton.setText("jpg");

        tifRadioButton.setText("tif");

        gifRadioButton.setText("gif");

        GroupLayout jPanel1Layout = new GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
                jPanel1Layout.createParallelGroup(GroupLayout.Alignment.LEADING)
                        .addGroup(jPanel1Layout.createSequentialGroup()
                                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                        .addGroup(jPanel1Layout.createSequentialGroup()
                                                .addComponent(label2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                                .addComponent(bmpRadioButton)
                                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                                                .addComponent(pngRadioButton)
                                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                                .addComponent(jpgRadioButton)
                                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                                .addComponent(gifRadioButton)
                                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                                .addComponent(tifRadioButton, javax.swing.GroupLayout.PREFERRED_SIZE, 50, javax.swing.GroupLayout.PREFERRED_SIZE))
                                        .addGroup(jPanel1Layout.createSequentialGroup()
                                                .addGap(227, 227, 227)
                                                .addComponent(convertButton, javax.swing.GroupLayout.PREFERRED_SIZE, 131, javax.swing.GroupLayout.PREFERRED_SIZE)))
                                .addContainerGap(251, Short.MAX_VALUE))
                        .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                        .addGroup(jPanel1Layout.createSequentialGroup()
                                                .addGap(0, 168, Short.MAX_VALUE)
                                                .addComponent(label1, javax.swing.GroupLayout.PREFERRED_SIZE, 322, javax.swing.GroupLayout.PREFERRED_SIZE))
                                        .addComponent(jTextField1))
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(browseButton, javax.swing.GroupLayout.PREFERRED_SIZE, 109, javax.swing.GroupLayout.PREFERRED_SIZE))
        );

        jPanel1Layout.linkSize(javax.swing.SwingConstants.HORIZONTAL, new java.awt.Component[] {bmpRadioButton, gifRadioButton, jpgRadioButton, pngRadioButton});

        jPanel1Layout.setVerticalGroup(
                jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                        .addGroup(jPanel1Layout.createSequentialGroup()
                                .addComponent(label1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                        .addGroup(jPanel1Layout.createSequentialGroup()
                                                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                                        .addComponent(browseButton, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                                        .addComponent(jTextField1, javax.swing.GroupLayout.PREFERRED_SIZE, 26, javax.swing.GroupLayout.PREFERRED_SIZE))
                                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                                        .addComponent(bmpRadioButton, javax.swing.GroupLayout.PREFERRED_SIZE, 18, javax.swing.GroupLayout.PREFERRED_SIZE)
                                                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                                                                .addComponent(pngRadioButton, javax.swing.GroupLayout.PREFERRED_SIZE, 18, javax.swing.GroupLayout.PREFERRED_SIZE)
                                                                .addComponent(jpgRadioButton)
                                                                .addComponent(gifRadioButton))
                                                        .addComponent(tifRadioButton)))
                                        .addComponent(label2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                .addComponent(convertButton, javax.swing.GroupLayout.PREFERRED_SIZE, 39, javax.swing.GroupLayout.PREFERRED_SIZE))
        );

        jPanel1Layout.linkSize(javax.swing.SwingConstants.VERTICAL, new java.awt.Component[] {bmpRadioButton, gifRadioButton, jpgRadioButton, pngRadioButton, tifRadioButton});

        jPanel3.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        jPanel3.setMaximumSize(new java.awt.Dimension(100, 100));
        jPanel3.setName(""); // NOI18N

        jLabel1.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel1.setMaximumSize(new java.awt.Dimension(100, 100));
        jLabel1.setPreferredSize(new java.awt.Dimension(100, 100));

        javax.swing.GroupLayout jPanel3Layout = new javax.swing.GroupLayout(jPanel3);
        jPanel3.setLayout(jPanel3Layout);
        jPanel3Layout.setHorizontalGroup(
                jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                        .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel3Layout.createSequentialGroup()
                                .addContainerGap()
                                .addComponent(jLabel1, javax.swing.GroupLayout.DEFAULT_SIZE, 587, Short.MAX_VALUE)
                                .addContainerGap())
        );
        jPanel3Layout.setVerticalGroup(
                jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                        .addGroup(jPanel3Layout.createSequentialGroup()
                                .addContainerGap()
                                .addComponent(jLabel1, javax.swing.GroupLayout.DEFAULT_SIZE, 299, Short.MAX_VALUE)
                                .addContainerGap())
        );

        menuBar.setBackground(new java.awt.Color(255, 255, 255));

        FileMenu.setText("File");

        NewMenuItem.setText("New");

        NewMenuItem.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                NewMenuItemActionPerformed(evt);
            }
        });

        FileMenu.add(NewMenuItem);

        SaveMenuItem.setText("Save");
        SaveMenuItem.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                SaveMenuItemActionPerformed(evt);
            }
        });
        FileMenu.add(SaveMenuItem);

        menuBar.add(FileMenu);

        ExitMenu.setText("Exit");
        ExitMenu.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                ExitMenuMouseClicked(evt);
            }
        });

        menuBar.add(ExitMenu);

        setJMenuBar(menuBar);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
                layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                        .addGroup(layout.createSequentialGroup()
                                .addContainerGap()
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                        .addComponent(jPanel3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                        .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                                .addContainerGap())
        );
        layout.setVerticalGroup(
                layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                        .addGroup(layout.createSequentialGroup()
                                .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(jPanel3, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addContainerGap())
        );

        pack();
        setLocationRelativeTo(null);
    }

    private void convertButtonActionPerformed(ActionEvent evt) {
        String imageType="";
        BufferedImage image =null;
        if(bmpRadioButton.isSelected() || pngRadioButton.isSelected() || jpgRadioButton.isSelected() || gifRadioButton.isSelected() || tifRadioButton.isSelected())
        {
            String fileNameWIthoutExt ="";
            try{
                if(bmpRadioButton.isSelected()){
                    imageType = "bmp";
                }
                else if(pngRadioButton.isSelected()){
                    imageType = "png";
                }
                else if(jpgRadioButton.isSelected()){
                    imageType = "jpg";
                }
                else if(gifRadioButton.isSelected()){
                    imageType = "gif";
                }
                else if(tifRadioButton.isSelected()){
                    imageType = "tif";
                }
                image =ImageIO.read(new FileInputStream(openFileChooser.getSelectedFile()));
                File file = openFileChooser.getSelectedFile();
                fileNameWIthoutExt = file.getName().split("\\.")[0];
                String extName = file.getName().split("\\.")[1];

                File theDir = new File("Images");
                // if the directory does not exist, create it
                if (!theDir.exists()) {
                    boolean result = false;
                    try{
                        theDir.mkdir();
                        result = true;
                    }
                    catch(SecurityException se){
                    }
                    if(result) {
                        System.out.println("DIR created");
                    }
                }else{
                    FileUtils.cleanDirectory(theDir);
                }

                File file2 = new File(theDir.getAbsolutePath()+"/"+fileNameWIthoutExt+"."+imageType);

                ImageIO.write(image,imageType,file2);
            } catch (Exception ex) {
                JOptionPane.showMessageDialog(null, "There is Some Error!!", "Warning Message",0);
            }

            jLabel1.setIcon(new ImageIcon(new ImageIcon(image).getImage().getScaledInstance(587, 299, 0)));
            JOptionPane.showMessageDialog(null, fileNameWIthoutExt+" Converted Successfully!!", "Success Message",1);
        }
        else{
            JOptionPane.showMessageDialog(null, "Please Select Image Type to Convert", "Warning Message",0);
        }
    }

    private void openFileChooserActionPerformed(java.awt.event.ActionEvent evt) {

        int users_value = openFileChooser.showOpenDialog(this);
        BufferedImage image =null;


        File file = openFileChooser.getSelectedFile();
        jTextField1.setText(file.getPath());
        try {
            image = ImageIO.read(file);
        } catch (Exception ex) {
            JOptionPane.showMessageDialog(null, "There is Some Error!!", "Warning Message",0);
        }

        jLabel1.setIcon(new ImageIcon(new ImageIcon(image).getImage().getScaledInstance(587, 299, 0)));

    }

    private void browseButtonActionPerformed(java.awt.event.ActionEvent evt) {
        openFileChooser.showOpenDialog(jPanel1);
    }

    private void ExitMenuMouseClicked(java.awt.event.MouseEvent evt) {
        int confirmed = JOptionPane.showConfirmDialog(null,
                "Are you sure you want to exit the program?", "Exit Program Message Box",
                JOptionPane.YES_NO_OPTION);

        if (confirmed == JOptionPane.YES_OPTION) {
            dispose();
        }
        if(confirmed == JOptionPane.NO_OPTION){
            System.out.print("cancel");
        }
    }

    private void NewMenuItemActionPerformed(java.awt.event.ActionEvent evt) {
        jLabel1.setIcon(null);
        jTextField1.setText("");
        buttonGroup1.clearSelection();
    }

    private void SaveMenuItemActionPerformed(ActionEvent evt) {
        saveFileChooser.showSaveDialog(this);
        BufferedImage image =null;

        File source = new File("Images/");
        try {
            image =ImageIO.read(new FileInputStream(source.listFiles()[0]));
            String absolutePath = saveFileChooser.getSelectedFile().getAbsolutePath();
            String filePath = absolutePath.substring(0,absolutePath.lastIndexOf(File.separator));
            File file = new File(filePath+"\\"+ saveFileChooser.getSelectedFile().getName()+"."+source.listFiles()[0].getName().split("\\.")[1]);
            ImageIO.write(image,source.listFiles()[0].getName().split("\\.")[1],file);
            JOptionPane.showMessageDialog(null, " Saved Successfully!!", "Success Message",1);
        } catch (IOException ex) {
            JOptionPane.showMessageDialog(null, "There is Some Error!!", "Warning Message",0);
        }
    }


    public static void main(String args[])
    {
        new Form().setVisible(true);

    }

}

