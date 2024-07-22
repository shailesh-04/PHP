#include<conio.h>
#include<iostream.h>
class STUDENT
{
	public:
	int sRoll;
	char sName[20];
	STUDENT()
	{
		cout<<"\n Enter Value Of Student Roll Numebr :-";
		cin>>sRoll;
		cout<<" Enter Any Value Of Student Name :-";
		cin>>sName;
	}
};
class TEST:public STUDENT
{
	int s1,s2,s3,s4;
	public:
	TEST()
	{
		cout<<"\n Enter S1 MArk :-";
		cin>>s1;
		cout<<" Enter S12 MArk :-";
		cin>>s2;
		cout<<" Enter S3 MArk :-";
		cin>>s3;
		cout<<" Enter S4 MArk :-";
		cin>>s4;
	}
	void Display()
	{
		gotoxy(1,3);cout<<sRoll;
		gotoxy(8,3);cout<<sName;
		gotoxy(27,3);cout<<s1;
		gotoxy(33,3);cout<<s2;
		gotoxy(40,3);cout<<s3;
		gotoxy(47,3);cout<<s4;

	}
};

void main()
{
	clrscr();
	TEST T;
	clrscr();
	cout<<" Roll  Name                S1    S2     S1    S2";

	T.Display();
}