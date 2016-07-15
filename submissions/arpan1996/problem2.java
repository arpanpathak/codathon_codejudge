import java.util.Arrays;
import java.util.LinkedList;
import java.io.BufferedReader;
import java.io.InputStreamReader;
class graph
{
	private int[][] G;
	graph(int size) { G=new int[size][size]; }
	public void connect(int i,int j) { G[i-1][j-1]=1;  G[j-1][i-1]=1; }
	public void unfriend(int i,int j) { G[i-1][j-1]=0;  G[j-1][i-1]=0; }
	public boolean isFriend(int i,int j) { return G[i-1][j-1]==1?true:false; }
	
	public boolean isFF(int i,int j)
	{
		LinkedList<Integer> que=new LinkedList<Integer>();
		boolean[] visited=new boolean[G.length];
		Arrays.fill(visited, false);
		que.addLast(i-1);
		visited[i-1]=true;
		while(!que.isEmpty())
		{
			int explore=que.removeFirst();
			if(explore==j-1){ return true;  }
			for(int k=0;k<G.length;k++)
			{
				if(G[explore][k]==1 && visited[k]==false)
				{
					que.add(k);
					visited[k]=true;
				}
			}
		}
		return false;
	}
	public void getMutual(int i,int j)
	{
		String mutual="";
		for(int k=0;k<G.length;k++)
		{
			if(G[i-1][k]==1 && G[j-1][k]==1)
				mutual+=Integer.toString(k+1)+" ";
		}
		System.out.println(mutual.equals("")?"No Mutual Friends":mutual);
	}
}
public class problem2
{
	public static void main(String[] args) throws Exception{
		BufferedReader ip=new BufferedReader(new InputStreamReader(System.in));
		int n=Integer.parseInt(ip.readLine());
		graph G=new graph(n);
		String choice=ip.readLine();
		while(!choice.equals("-1"))
		{
			
			String arr[]=choice.split(" ");
			int i=Integer.parseInt(arr[1]), j=Integer.parseInt(arr[2]);
			if(arr[0].equals("C"))
				G.connect(i, j);
			else if(arr[0].equals("FF"))
				System.out.println(G.isFF(i, j)?"Friend Of Friend":"Not Friend Of Friend");
			else if(arr[0].equals("M"))
				G.getMutual(i, j);
			else if(arr[0].equals("U"))
				G.unfriend(i,j);
			else if(arr[0].equals("F"))
				System.out.println(G.isFriend(i,j)?"Friend":"Not Friend");
			choice=ip.readLine();
			
		}
		
 	}
}
