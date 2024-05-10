#include<conio.h>
#include<iostreaml.h>
#include<strsing.h>
class Student
{
	public:
	int roll;
	char name[20];
	Student(int r,char *n)
	{
		roll = r;
		strcpy(name,n);
	}
};

class Test:public Student
{
	public:
	int cpp,os,dfs,sad,pre;
	Test(,int r,char *name):Student(r,name)
	{

	}
};

class Result:public Test
{
	int total;
	float per;
	public:
	Result(int r):Test(r)
	{

	}
	void Get()
	{

	}
	void Display()
	{
		cout<<"\n ROLL NO :) "<<roll;
	}
};
void main()
{
	clrscr();

	Result R(13);

	R.Get();
	R.Display();
	getch();
}