#include<iostream.h>
#include<conio.h>
#include<string.h>
class MATCHES
{
	public:
	char Player_Name[20];
	int No_of_Matches;

		MATCHES(char name[], int numMatches)
		{
			strcpy(Player_Name,name);
			No_of_Matches  = numMatches;
		}
};

class TEST:public MATCHES
{
	public:
	int run;
	float a;
	 TEST(char name[], int numMatches, int totalRuns):MATCHES(name, numMatches)
	 {
		run = totalRuns;
		 a=(run) / No_of_Matches;
	 }
	 void Display()
	 {
		cout<<"\n Name Of Pleyer :)"<<Player_Name;
		cout<<"\n No. Of Pleyer  :)"<<No_of_Matches;
		cout<<"\n Run Of Pleyer  :)"<<run;
		cout<<"\n  Average Run Of Pleyer :)"<<a;

	 }

};

class ONEDAY : public MATCHES
{
	public:
	int run;
	float a;
	 ONEDAY(char name[],int numMatches, int totalRuns) : MATCHES(name, numMatches)
	 {
		run = totalRuns;
		a= (run) / No_of_Matches;
	 }
	  void Display()
	 {
		cout<<"\n Name Of Pleyer :)"<<Player_Name;
		cout<<"\n No. Of Pleyer  :)"<<No_of_Matches;
		cout<<"\n Run Of Pleyer  :)"<<run;
		cout<<"\n  Average Run Of Pleyer :)"<<a;

	 }
};

class T20 : public MATCHES
{
	public:
	int run;
	float a;
	 T20(char name[], int numMatches, int totalRuns):MATCHES(name, numMatches)
	 {
		run = totalRuns;
		a = (run) / No_of_Matches;
	 }
	  void Display()
	 {
		cout<<"\n Name Of Pleyer :)"<<Player_Name;
		cout<<"\n No. Of Pleyer  :)"<<No_of_Matches;
		cout<<"\n Run Of Pleyer  :)"<<run;
		cout<<"\n  Average Run Of Pleyer :)"<<a;

	 }
};
void main()
{
	clrscr();
	TEST T1("Shialesh", 50, 2500);
	ONEDAY O("Rahul", 100, 4500);
	T20 T2("Prdip", 30, 900);

	T1.Display();
	O.Display();
	T2.Display();

	 getch();
}
