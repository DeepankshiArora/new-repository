#include<iostream>
using namespace std;
int map(int i,int j)
{ return i*(i+1)/2+j;
}
class Ltmatrix{
float *a;
int n;
public:
void read();
void print();
float det();
Ltmatrix mul(Ltmatrix B);
Ltmatrix add(Ltmatrix B);
Ltmatrix inverse();
};
int Ltmatrix::Ltmatrix(int n)
{ this->n=n;
a=new float [n*(n+1)/2];
}void Ltmatrix::read(){
cout<<"Enter the non-zero elements"<<n<<"*"<<n<<"LOwer triangular 
matrix"<<endl;
for(int i=0;i<n;i++)
{ for(int j=0;j<+i;j++)
{cout<<"a["<<i<<"]["<<j<<"]=";
cin>>a[map(i,j)];
}}}
void Ltmatrix::print(){
cout<<"/n THe lower triangular matrix is /n";
for(int i=0;i<n;i++){
for(int j=0;j<n;j++)
{ if(i>=j)
cout<<a[map(i,j)]<<"/t";
else
cout<<"/t";
}
cout<<"/n";
}}
float Ltmatrix::det(){
float d=1;
for(int i=0;i<n;i++)
{ for(int j=0;j<n;j++)
{
d=d*a[map(i,j)];
return d;
 } }}
main(){
Ltmatrix ob;
ob.read();
ob.print();
ob.det();}
