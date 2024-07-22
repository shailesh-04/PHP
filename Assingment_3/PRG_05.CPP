#include<conio.h>
#include<iostream.h>
#include<string.h>
class GAME
{
	public:
	int point;
	char gameName[20];
	GAME(char *name)
	{
		strcpy(gameName,name);
	}
};
class BADMITOR:public GAME
{
	public:
	BADMITOR(char *name):GAME(name)
	{
	}
	void GetPoint()
	{
		cout<<" Enter "<<gameName<<" Points :-";
		cin>>point;
	}
	void Display()
	{
		cout<<"\n Game Name Is :) "<<gameName<<endl;
		cout<<" Game Point Is :) "<<point<<endl;
	}
};
class VOLLYBALL:public GAME
{
	public:
	VOLLYBALL(char *name):GAME(name)
	{
	}
	void GetPoint()
	{
		cout<<" Enter "<<gameName<<" Points :-";
		cin>>point;
	}
	void Display()
	{
		cout<<"\n Game Name Is  :) "<<gameName<<endl;
		cout<<" Game Point Is :) "<<point<<endl;
	}
};

class CRICKET:public GAME
{
	public:
	CRICKET(char *name):GAME(name)
	{
	}
	void GetPoint()
	{
		cout<<" Enter "<<gameName<<" Points :-";
		cin>>point;
	}
	void Display()
	{
		cout<<"\n Game Name Is :) "<<gameName<<endl;
		cout<<" Game Point Is :) "<<point<<endl;
	}
};

void main()
{
	clrscr();

	BADMITOR B("BADMITOR");
	VOLLYBALL V("VOLLYBALL");
	CRICKET C("	CRICKET");

	B.GetPoint();
	V.GetPoint();
	C.GetPoint();

	B.Display();
	V.Display();
	C.Display();
	getch();
}