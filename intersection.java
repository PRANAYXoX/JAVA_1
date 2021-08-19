/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package arraylist;

/**
 *
 * @author admin
 */
import java.util.*;
public class intersection 
{
    public static void intersection(int[] a,int[] b,int sz)
    {
        int[] temp=new int[sz];
        int c=-1;
        boolean f;
        for(int i=0;i<a.length;i++)
        {
            f=false;
            for(int j=0;j<b.length;j++)
            {
                if(a[i]==b[j])
                {
                    if(c==-1)
                    {
                        c++;
                        temp[c]=a[i];
                    }else
                    {
                        for(int k=0;k<=c;k++)
                        {
                            if(temp[k]==a[i])
                            {
                                f=true;
                            }
                        
                        }
                        if(!f)
                        {
                            c++;
                            temp[c]=a[i];
                        }
                    }
                }
            }
        }
        System.out.print("\nTOTAL ELEMENTS IN THE INTERSECTION SET:"+(c+1));
        System.out.print("\nTHE INTERSECTON SET:-\n");
        for(int i=0;i<=c;i++)
            System.out.print("\t"+temp[i]);
    }
    public static void main(String[] args)
    {
        int s1,s2;
        Scanner s=new Scanner(System.in);
        System.out.print("\nENTER THE SIZE OF SET 1:");
        s1=s.nextInt();
        System.out.print("\nENTER THE SIZE OF SET 2");
        s2=s.nextInt();
        int[] a=new int[s1];
        int[] b=new int[s2];
        System.out.print("\nEnter set 1:-\n");
        for(int i=0;i<a.length;i++)
        {
            a[i]=s.nextInt();
        }
        System.out.print("\nEnter set 2:-\n");
        for(int i=0;i<b.length;i++)
        {
            b[i]=s.nextInt();
        }
        intersection(a,b,s1+s2);
    }
    
}
