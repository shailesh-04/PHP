#include<conio.h>
#include<iostream.h>
#include<string.h>
class MEDIA
{
	public:
	int price;
	char title[20];
	MEDIA(int price,char title[])
	{
		this->price = price;
		strcpy(this->title,title);
	}
};
class PENDRIVE:public MEDIA
{
	public:
	int qty;
	char type[20];
	PENDRIVE(int qty,char type[],int price,char *title):MEDIA(price,title)
	{
		this->qty = qty;
		strcpy(this->type,type);
	}
	void Display()
	{
		cout<<" TITLE   (: "<<title<<endl;
		cout<<" PRICE   (: "<<price<<endl;
		cout<<" TYPE    (: "<<type<<endl;
		cout<<" QUELITY (: "<<qty<<endl;
	}
};
class HARDDISK:public MEDIA
{
	public:

	int qty;
	char type[20];

	HARDDISK(int qty,char type[],int price,char *title):MEDIA(price,title)
	{
		this->qty = qty;
		strcpy(this->type,type);
	}
	void Display()
	{
		cout<<" TITLE   (: "<<title<<endl;
		cout<<" PRICE   (: "<<price<<endl;
		cout<<" TYPE    (: "<<type<<endl;
		cout<<" QUELITY (: "<<qty<<endl;
	}
};
void main()
{
	clrscr();
	PENDRIVE P(123,"USB 3.0",345,"Sandisk 64GB Pendrive");
	HARDDISK H(10,"SATE",300,"Sagate 2TB HHD");
	cout<<"\n=======PENDRIVE========="<<endl;
	P.Display();
	cout<<"\n=======HARDDISK========="<<endl;
	H.Display();
	getch();
}