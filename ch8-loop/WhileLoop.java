import java.util.Scanner;
public class WhileLoop {
    void main(){
        Scanner scanner = new Scanner(System.in);
        int age = -1;

        while (age < 0 || age >  150 ){
            IO.print("กรุณาป้อนอายุ (0-150) :");
            age = scanner.nextInt();
        }
        IO.println("ลงทะเบียนสำเร็จ");
        IO.println("อายุคุณคือ " +age+"ปี");
        scanner.close();
        }
    }

