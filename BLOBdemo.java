
package blobdemo;

import java.io.FileInputStream;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;


public class BLOBdemo {

   public static void main(String[] args)throws Exception {
Class.forName("com.mysql.jdbc.Driver");
Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/lob","root","");
PreparedStatement ps=con.prepareStatement("insert into blob1(name,image)values(?,?)");
ps.setString(1,"OPETH");
FileInputStream fis=new FileInputStream("F:\\movies\\Static-X\\Albums\\1999 - Wisconsin Death Trip (2CD)\\CD1\\1_Push_It.mp3");
ps.setBinaryStream(2,fis);
int rc=ps.executeUpdate();
if(rc>0)
    System.out.print("\nSUCCESS");
else
    System.out.print("\nFAILURE");
    }
    
}
