#include <iostream>

using namespace std;

int main()

{

int hi=0,mi=0,hf=0,mf=0,tr=0,ti,tf=0;

cout << "Digite a hora inicial" << endl;

cin>>hi;

cout << "Digite os minutos iniciais" << endl;

cin>>mi;

cout << "Digite a hora final" << endl;

cin>>hf;

cout << "Digite os minutos finais" << endl;

cin>>mf;

ti=hi*60+mi;

cout<<ti<<endl;

tf=(hf*60)+mf;

cout<<tf<<endl;

if(tf<ti)

{

tr=1440-ti;

tr+=tf;

cout<<tr<<endl;

cout<<tr/60<<":"<<tr%60<<endl;

}

else{

tr=tf-ti;

cout<<tr/60<<":"<<tr%60<<endl;

}

}
