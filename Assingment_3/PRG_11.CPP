#include<conio.h>
#include<iostream.h>
#include<string.h>
class MEDIA
{
	public:
	float price;
	char title[50];

	MEDIA()
	{
		price = 10000;
		strcpy(title,"Learn cpp free");
	}
	void Display()
	{
		cout<<"\n Title Is (: "<<title<<endl;
		cout<<" Price (: "<<price<<endl;
	}
};
class BOOK:public MEDIA
{
	public:
	int pase;
	BOOK()
	{
		pase = 500;
	}
	void Display()
	{
		MEDIA::Display();
		cout<<" Pase (: "<<pase<<endl;
	}

};
class TEPC:public MEDIA
{
	public:
	float time;
	TEPC()
	{
		time = 1;
	}
	void Display()
	{
		cout<<" Time (: "<<time<<endl;
	}

};
void main()
{

	clrscr();
	BOOK B;
	TEPC T;

	B.Display();
	T.Display();
	getch();
}