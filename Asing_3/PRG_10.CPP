#include<conio.h>
#include<iostream.h>
#include<stdlib.h>
class FIRST
{
  public:

  char carName[20],model;

};
class SECOND:public FIRST
{
  public:

  int carNum,year;
};
class THIRD:public SECOND
{
  public:
  void Get()
  {
	cout<<"\n Enter Value Of Car NAme   :-";
	cin>>carName;

	fflush(stdin);

	cout<<" Enter Value Of Car Model  :-";
	cin>>model;
	cout<<" Enter Value Of Car Number :-";
	cin>>carNum;
	cout<<" Enter Value Of Car Year   :-";
	cin>>year;
  }
  void Put()
  {
	cout<<"\n Car Name Is  (: "<<carName<<endl;
	cout<<" Car Model Is (: "<<model<<endl;
	cout<<" Car Num Is   (: "<<carNum<<endl;
	cout<<" Car Year Is  (: "<<year<<endl;
  }

};
void main()
{
	clrscr();
	THIRD T;
	T.Get();
	T.Put();
	getch();
}