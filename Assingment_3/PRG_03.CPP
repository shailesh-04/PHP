#include<conio.h>
#include<iostream.h>
#include<string.h>
class SUPPLY
{
	public:
	int sP;
	long int tS;
	char city[20];

	SUPPLY(long int ts, char ct[])
	{

		strcpy(city,ct);
		tS =  ts;
	}
	void calculate()
	{
		if(tS <= 5000)
			sP = 0;
		else if(tS <= 20000)
			sP = 2;
		else
		{
			int temp = (tS - 20000) / 10000;
			 sP = 2+ temp;
		}

	}

	void Put()
	{
		calculate();

		cout<<"\n City        :) "<<city;
		cout<<"\n Total Sales :) "<<tS;
		cout<<"\n No. Of SelsePerson :) "<<sP<<endl;
	}
};
class Ahemdabad:public SUPPLY
{
	public:
	Ahemdabad(long int ts, char ct[]):SUPPLY(ts,ct)
	{

	}
};
class Jamnagr:public SUPPLY
{
	public:
	Jamnagr(long int ts, char *ct):SUPPLY(ts,ct)
	{

	}
};
void main()
{
	clrscr();
	Ahemdabad A(10000,"Ahemdabad");
	Jamnagr J(30000,"Jamnagr");
	A.Put();
	J.Put();
	getch();
}