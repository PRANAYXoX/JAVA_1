
package jdbcalquery;

import java.sql.CallableStatement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Types;
import java.util.Scanner;

public class storedfuunc {
static public void main(String[] args)throws Exception
{
    Scanner s=new Scanner(System.in);
    Class.forName("com.mysql.jdbc.Driver");
    Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/company","root","");
    CallableStatement cs=con.prepareCall("{?=call empname(?)}");
    System.out.print("\nENTER THE ID TO FETCH RESULT:");
    int id=s.nextInt();
    cs.setInt(2,id);
    cs.registerOutParameter(1,Types.VARCHAR);
    cs.execute();
    if(cs.getString(1).isEmpty())
        System.out.print("\nNO RECORD FOUND!!");
    else
    System.out.print("NAME:"+cs.getString(1));
    
}
}
