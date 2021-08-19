
package jdbcalquery;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.*;
public class JdbcAlQuery {

 public static void main(String[] args)throws Exception
 {
    int ch=0;
    int row;
    Scanner s=new Scanner(System.in);
     Class.forName("com.mysql.jdbc.Driver");
     Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/company","root","");
     Statement st=con.createStatement();
     do{
     System.out.print("\n\tMENU:-\n1)INSERT\n2)UPDATE\n3)DELETE\n4)DISPLAY\n5)EXIT\nENTER CHOICE:");
         ch=s.nextInt();
         switch(ch)
         {
            case 1:
             row=0;
                row=st.executeUpdate("INSERT INTO employee values(103,'MARTY',34500)");
                if(row>0)
                        System.out.print("\nINSERTION SUCCESS!!");
                else
                    System.out.print("\nOPERATION FAILED!!");
                break;
            case 2:
            row=0;
            row=st.executeUpdate("UPDATE employee SET SALARY=65009 WHERE ID=1");
            if(row>0)
                        System.out.print("\nUPDATION SUCCESS!!");
                else
                    System.out.print("\nOPERATION FAILED!!");    
                break;
            case 3:
                row=0;
                row=st.executeUpdate("DELETE FROM employee where ID=103");
                 if(row>0)
                        System.out.print("\nDELETION SUCCESS!!");
                else
                    System.out.print("\nOPERATION FAILED!!");
                break;
            case 4:
     ResultSet rs=st.executeQuery("select * from employee");
     while(rs.next())
     {
         System.out.print(rs.getString(1)+"\t");
         System.out.print(rs.getString(2)+"\t");
         System.out.print(rs.getString(3)+"\n");
     }
        break;
             case 5:
                 System.exit(0);
                 break;
     }
     }while(ch!=5);
 }
    
}
