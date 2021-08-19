
package storedfun;

import java.sql.CallableStatement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Types;
import java.util.Scanner;

public class storedfn2 {
    
static public void main(String[] args)throws Exception
    {
    Scanner s=new Scanner(System.in);
    System.out.print("\nENTER ID:");
    int id=s.nextInt();
    Class.forName("com.mysql.jdbc.Driver");
    Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/company","root","");
    CallableStatement cs=con.prepareCall("{?=call getempname(?)}");
    cs.setInt(2,id);
    cs.registerOutParameter(1, Types.VARCHAR);
    cs.execute();
    System.out.print("\nNAME OF EMPLOYEE:"+cs.getString(1));
    }
}
