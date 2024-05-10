#include<iostream.h>
#include<conio.h>
class Shape {
public:
	 virtual float calculateArea(){
		return 0.0;
	 }
};
class Circle:public Shape
{
	public:
	float radius;

	 Circle(float r):radius(r) {}

	 float calculateArea()
	 {
		  return 3.14 * radius * radius;
	 }
};

class Square : public Shape
{
	public:
	float side;
	 Square(float s) : side(s) {}

	 float calculateArea()
	 {
		  return side * side;
	 }
};
class Rectangle:public Shape
{
 public:
	 float length,width;
	 Rectangle(float l, float w) : length(l), width(w) {}

	 float calculateArea()
	 {
        return length * width;
    }
};

void main()
{
	clrscr();
	 Shape* SP;
	 Circle C(5.0);
	 Square S(4.0);
	 Rectangle R(3.0, 6.0);

	 SP = &C;
	 cout << "\n Area of Shape (: " << SP->calculateArea() <<endl;

	 SP = &S;
	 cout << " Area of Shape (: " << SP->calculateArea() <<endl;

	 SP = &R;
	 cout << " Area of Shape (: " << SP->calculateArea() <<endl;

	 getch();
}
