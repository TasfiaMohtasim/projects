# include "iGraphics.h"

int ball_x, ball_y=0;
int dx, dy;
int position_x=150;
int start=0;

void iDraw()
{

	iClear();

	iSetColor(255, 255, 255);
	iFilledCircle(ball_x, ball_y, 15);

	iSetColor(255, 255, 255);
	iText(10, 10, "Press p for pause, r for resume, END for exit.");
	iSetColor(255,255,255);
	iFilledRectangle(position_x,20,120,7);


}

void iMouseMove(int mx, int my)
{

}

void iMouse(int button, int state, int mx, int my)
{
	if (button == GLUT_LEFT_BUTTON && state == GLUT_DOWN)
	{

	}
	if (button == GLUT_RIGHT_BUTTON && state == GLUT_DOWN)
	{

	}
}

void iKeyboard(unsigned char key)
{
	if (key == 'p')
	{

		iPauseTimer(0);
	}
	if (key == 'r')
	{
		iResumeTimer(0);
	}
}

void iSpecialKeyboard(unsigned char key)
{
	if(key==GLUT_KEY_END)
	{
	    exit (0);
	}
	if (key == GLUT_KEY_RIGHT && position_x <= 300)
	{
		position_x += 40;
	}
	else if(key==GLUT_KEY_LEFT && position_x>= 6)
	{

			position_x -= 40;
	}

}

void ballChange(){
	ball_x += dx;
	ball_y += dy;

	if (ball_x > 400 || ball_x < 0)
		dx = -dx;
	if (ball_y > 400 )
		dy = -dy;



		printf("%d %d %d %d %d %d\n",ball_x,ball_y,position_x,20,dx,dy);
		if (ball_x > position_x && ball_x < position_x+120 && ball_y <= 60 && ball_y>-10  )
			{
			    dx = dx++;
				dy = dy++;
			}
			else if (start==0)
			start=1;

				else if(start==1)
			{
				if((ball_x < position_x && ball_x >position_x+120) && ball_y <= 60  )
			   {
			    dx = 5000;
				dy = -7000;

			   }
            }


}

int main()
{

	iSetTimer(30, ballChange);
	dx = 05;
	dy = 07;
	iInitialize(400, 400, "BouncingBall");

	return 0;
}
