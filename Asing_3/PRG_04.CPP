#include<conio.h>
#include<iostream.h>
#include<string.h>
class EMPLOYEE
{
	public:
	char empName[20];
};
class INTERNAL:virtual public EMPLOYEE
{
	public:
		int iPoint;
	INTERNAL()
	{
		;
	}
	INTERNAL(int ip)
	{
		iPoint = ip;
	}

};
class EXTERNAL:virtual public EMPLOYEE
{
	public:
		int ePoint;
		EXTERNAL(int ep)
		{
			ePoint = ep;
		}
};
class RESULT:public INTERNAL,public EXTERNAL
{
	int total;
	public:
	RESULT(int ip,int ep,char *name):INTERNAL(ip),EXTERNAL(ep)
	{
		strcpy(empName,name);


	}
	void Display()
	{
		total = iPoint+ePoint;
		cout<<" Name Of Employ    :) "<<empName<<endl;
		cout<<" Internal Point Is :)"<<ePoint<<endl;
		cout<<" External Point Is :)"<<iPoint<<endl;
		cout<<"\n Total Ponts Is :) "<<total;
	}
};
void main()
{
	clrscr();
	RESULT R(10,15,"shailesh");
	R.Display();
	getch();
}