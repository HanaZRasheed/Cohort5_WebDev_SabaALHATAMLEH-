
import java.util.Scanner; 

public class TestApp{
        public static void main(String[] args) {
        System.out.println("This will be printed");
        System.out.println("num1");
        System.out.println("Hello world");
            int num1=10;
            int num2=10;
        float f = 3.145f;
        double d = 3.13457;
        boolean b = true;
         char c = 'a';
         MyClass m= new MyClass();
         m.x=6;
         m.Method();
       // long l = 1_234_567_890;
    //    short s = 202_020;
 System.out.println(num1);
 System.out.println(f);
 System.out.println(d);
 System.out.println(b);
 System.out.println(c);
 //System.out.println(l);
// System.out.println(s);
 System.out.println("============================");
Scanner sc= new Scanner(System.in); //System.in is a standard input stream.

for(int i=0;i<10;i++){
    System.out.println("============================");
     System.out.println("1-ADD");
     System.out.println("2-sub");
     System.out.println("3-mult");
     System.out.println("4-Exit");
       System.out.println("============================");
System.out.print("Enter  number- ");
int a= sc.nextInt();

switch (a) {
  case 1:
    System.out.println(num1+num2);
    break;
  case 2:
    System.out.println(num2-num1);
    break;
  case 3:
    System.out.println(num1*num2);
    break;
  case 4:
break;
   break;
    }
}
int i = 0;
while (i < 5) {
  System.out.println(i);
  i++;
}
String firstName = "Saba ";
String lastName = "Hatamleh";
System.out.println(firstName.concat(lastName));
}
  String s="hello";  
System.out.println(s.substring(0,2));  
}
  /*  public static void main(String args[]){
        System.out.println("num1");
        System.out.println("Hello world");

        int num1=10;
        float f = 3.145f;
        double d = 3.13457;
        boolean b = true;
         char c = 'a';
        long l = 1_234_567_890;
        short s = 202_020;

       
    }
}*/public class MyClass {
  int x;  

  
  public MyClass() {
    x = 5;  
  }
    public void Method() {
    System.out.println("my class");
  }
}