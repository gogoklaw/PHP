import java.util.Scanner;
public class Customer {
    public static void main(String[] args){}
    private int customerID;                                                                                                                                                           ;
    private String customerName;
    private boolean customerGender;
    
    public Customer(){
        this.customerID = 101;
        this.customerName = "nangnaannna";
        this.customerGender = true;

    }

    public Customer(int cid){
        this.customerID = cid;
        this.customerName = "Unknown";

    }


    public int  getCustomerID(){
        return customerID;
    }
    public void  setCustomerID(int customerID){
        this.customerID = customerID;
    }

    private void showDetail(){
        IO.println("Customer detail");
        IO.println("Customer ID : "+this.customerID);
        IO.println("Customer name : "+this.customerName);
        if(this.customerGender == true ){
            IO.println("Customer Gender id male");
        }else{
            IO.println("Customer Gender id femail");
        }
        
    }
    

    public void displayDetail(){
        showDetail();
    }


}
