import java.util.Scanner;
public class problem1 {

	public static void main(String[] args) {
		Scanner ip=new Scanner(System.in);
		int n=Integer.parseInt(ip.nextLine());
		StringBuilder order=new StringBuilder("");
		String temp="";
		temp=ip.nextLine();
		while(!temp.equals(""))
		{
			order.append(temp+"\n");
			temp=ip.nextLine();
		}
		int start=-1;
		for(int i=0;i<n;i++)
		{
			start=order.indexOf("$",start+1); int j=start+1;
			String price="";
			while(Character.isDigit(order.charAt(j)) || order.charAt(j)==' ')
			{
				if(order.charAt(j)!=' ')
					price+=order.charAt(j);
				j++;
			}
			System.out.print("$"+Integer.parseInt(price)+"\nx");
		}
	}
}
