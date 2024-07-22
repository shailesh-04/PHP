#include<conio.h>
#include<iostream.h>
#include<string.h>
class PRODUCT
{
	public:

	int prodCode;
	char prodName[20];
	PRODUCT()
	{
	;
	}
	PRODUCT(int code,char *name)
	{
		prodCode = code;
		strcpy(prodName,name);
	}
};
class STACK:public PRODUCT
{
	public:

	int stack;

	STACK()
	{
		;
	}
	STACK(int code,char *name):PRODUCT(code,name)
	{

	}
	void Update(int updtStack)
	{
		stack = stack + updtStack;
	}
	void Display()
	{
		cout<<"\n Product Name :) "<<prodName<<endl;
		cout<<" Product Code   :) "<<prodCode<<endl;
		cout<<" Product Stack  :) "<<stack;
	}
};
class SALES:public STACK
{
	public:
	void Sales()
	{
		cout<<"\n How Many You Want To Salles Product STACK :-";
		int salesStack;
		cin>>salesStack;

		if(salesStack <= stack)
		{
			cout<<"\n Sucsesfuly Selse....";
			int temp = 0;

			temp = temp - salesStack;

			Update(temp);
		}
		else
		{
			cout<<"\n Your Stack Is Less .. Sorry You Can't Saless ..";
		}
	}
};
class PURCHESE:public STACK
{
	public:
	int purcheseStack;

	PURCHESE(int code,char *name,int purcheseStack):STACK(code,name)
	{
	  Update(purcheseStack);
	}
};
void main()
{
	char ch;
	clrscr();

	PURCHESE P(1,"COMPUTER",300);
	P.Display();
	P.Sales();
	P.Display();
}