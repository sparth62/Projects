#include<stdio.h>
#include<conio.h>
#include<ctype.h>
#include<stdlib.h>
char s1[3][3] ={'1','2','3','4','5','6','7','8','9'};
int cnt=1;
char sou,ch,st;
void sound()
{
	repeat:
	printf("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\t\t\t\t\t   Do you want to unable sound(Y/N)");
	sou=getch();
	sou=tolower(sou);
	if(sou=='y')
		sou='0';
	else if(sou=='n')
		sou='1';
	else
	{
		goto repeat;
	}	
}	
void title()
{
	if(sou=='0')
		printf("\a");
	printf("\n\n\n\n\n\n\n\n\n\t\t\t\t\t\t     TIC TAC TOE");
	printf("\n\n\t\t\t\t\t     DEVELOPER : PARTH SHINOJIYA");
	printf("\n\n\n\t\t\t\t\t        Press any key to play");
	getch();
}
void run()
{
	if(sou=='0')
		printf("\a");
	printf("\n\n\n\t\t\t\t\t\t  TIC TAC TOE");
	printf("\n\t\t\t\t\t\t\t\t    DEVELOPER : PARTH SHINOJIYA");
}
void start()
{
	printf("\n\t\tPlayer_1:x");
	printf("\n\t\tPlayer_2:o");
}
void print()
{
	if(cnt!=10)
		start();
	printf("\n\t\t\t\t\t %c | %c | %c ",s1[0][0],s1[0][1],s1[0][2]);
	printf("\n\t\t\t\t\t-----------");
	printf("\n\t\t\t\t\t %c | %c | %c ",s1[1][0],s1[1][1],s1[1][2]);
	printf("\n\t\t\t\t\t-----------");
	printf("\n\t\t\t\t\t %c | %c | %c ",s1[2][0],s1[2][1],s1[2][2]);
}
void restart()
{
	recheck:
	printf("\n\t\tDo you want to play again(Y/N):");
	ch=getch();
	ch=tolower(ch);
	if(ch=='y')
	{
		st='0';
	}
	else if(ch=='n')
		exit(0);
	else
	{
		system("cls");
		goto recheck;
	}
}
void condition()
{
	if(s1[0][0]==s1[0][1] && s1[0][1]==s1[0][2] || s1[0][0]==s1[1][0] && s1[1][0]==s1[2][0] || s1[0][0]==s1[1][1] && s1[1][1]==s1[2][2])
	{
		printf("\n\n\t\t********************************************************************************");
		printf("\n\n\t\t\t\t\t  **************************");
		printf("\n\t\t\t\t\t  *    CONGRATULATIONS!    *");
		if(s1[0][0] == 'x')
		printf("\n\t\t\t\t\t  *      PLAYER-1 WIN      *");
		else
		printf("\n\t\t\t\t\t  *      PLAYER-2 WIN      *");
		printf("\n\t\t\t\t\t  **************************");
		printf("\n\n\t\t********************************************************************************");
		restart();
	}
	if(s1[0][1]==s1[1][1] && s1[1][1]==s1[2][1] || s1[1][0]==s1[1][1] && s1[1][1]==s1[1][2] || s1[2][0]==s1[1][1] && s1[1][1]==s1[0][2])
	{
		printf("\n\n\t\t********************************************************************************");
		printf("\n\n\t\t\t\t\t  **************************");
		printf("\n\t\t\t\t\t  *    CONGRATULATIONS!    *");
		if(s1[1][1] == 'x')
		printf("\n\t\t\t\t\t  *      PLAYER-1 WIN      *");
		else
		printf("\n\t\t\t\t\t  *      PLAYER-2 WIN      *");
		printf("\n\t\t\t\t\t  **************************");
		printf("\n\n\t\t********************************************************************************");
		restart();
	}
	if(s1[0][2]==s1[1][2] && s1[1][2]==s1[2][2] || s1[2][0]==s1[2][1] && s1[2][1]==s1[2][2])
	{
		printf("\n\n\t\t********************************************************************************");
		printf("\n\n\t\t\t\t\t  **************************");
		printf("\n\t\t\t\t\t  *    CONGRATULATIONS!    *");
		if(s1[2][2] == 'x')
		printf("\n\t\t\t\t\t  *      PLAYER-1 WIN      *");
		else
		printf("\n\t\t\t\t\t  *      PLAYER-2 WIN      *");
		printf("\n\t\t\t\t\t  **************************");
		printf("\n\n\t\t********************************************************************************");
		restart();
	}
	else
	{
		if(cnt==10)
		{
			printf("\n\n\t\t********************************************************************************");
			printf("\n\n\t\t\t\t\t\t***********************");
			printf("\n\t\t\t\t\t\t*      MATCH TIE      *");
			printf("\n\t\t\t\t\t\t***********************");
			printf("\n\n\t\t********************************************************************************");
			restart();
		}
	}
}
void entry()
{
	char pos;
	if(cnt%2!=0)
		printf("\n\t\tPlayer 1's turn.");
	else
		printf("\n\t\tPlayer 2's turn.");
	choice:
	fflush(stdin);
	printf("\n\t\tEnter position:");
	pos=getche();
	if(pos==s1[0][0])
	s1[0][0]=cnt%2==0 ? 'o' : 'x';
	else if(pos==s1[0][1])
	s1[0][1]=cnt%2==0 ? 'o' : 'x';
	else if(pos==s1[0][2])
	s1[0][2]=cnt%2==0 ? 'o' : 'x';
	else if(pos==s1[1][0])
	s1[1][0]=cnt%2==0 ? 'o' : 'x';
	else if(pos==s1[1][1])
	s1[1][1]=cnt%2==0 ? 'o' : 'x';
	else if(pos==s1[1][2])
	s1[1][2]=cnt%2==0 ? 'o' : 'x';
	else if(pos==s1[2][0])
	s1[2][0]=cnt%2==0 ? 'o' : 'x';
	else if(pos==s1[2][1])
	s1[2][1]=cnt%2==0 ? 'o' : 'x';
	else if(pos==s1[2][2])
	s1[2][2]=cnt%2==0 ? 'o' : 'x';
	else
	{
		printf("\n\t\tWrong choice!");
		goto choice;
	}
}
void main()
{
	system("cls");
	sound();
	system("cls");
	title();
	system("cls");
	again:
	run();
	print();
	condition();
	if(st=='0')
	{
		s1[0][0]='1';
		s1[0][1]='2';
		s1[0][2]='3';
		s1[1][0]='4';
		s1[1][1]='5';
		s1[1][2]='6';
		s1[2][0]='7';
		s1[2][1]='8';
		s1[2][2]='9';
		cnt=1;
		system("cls");
		run();
		print();
		st='1';
	}	
	entry();
	cnt++;
	system("cls");
	goto again;
}