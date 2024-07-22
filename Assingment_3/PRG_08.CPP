#include<conio.h>
#include<iostream.h>
#include<string.h>
class VEHICLE
{
	public:
	char color[10];
	int vahicleNo;
	VEHICLE()
	{
	}
	VEHICLE(char *color, int no)
	{
		strcpy(this->color,color);
		vahicleNo = no;
	}
};
class SCOOTER:virtual public VEHICLE
{
	public:
	char type[20];
	long int price;
	SCOOTER(char *type,long int price,char *color,int no):VEHICLE(color,no)
	{
		strcpy(this->type,type);
		this->price = price;
	}


};
class BILL:virtual public VEHICLE
{
	public:
	int discount,tax;
	BILL(char *color,int no):VEHICLE(color,no)
	{

	}
};
class PAYMENT:public BILL, public SCOOTER
{
	long int bill;
	public:
	PAYMENT(char *type,long int price,char *color,int no):BILL(color,no),SCOOTER(type,price,color,no)
	{

	}
	void Display()
	{
		cout<<"\n Color      (: "<<color;
		cout<<"\n Vahicle No (: "<<vahicleNo;
		cout<<"\n Type       (: "<<type;
		cout<<"\n Price      (: "<<price;
	}
};
void main()
{
	clrscr();

	PAYMENT P("Bike",80000,"Red",1234);

	P.Display();

	getch();
}