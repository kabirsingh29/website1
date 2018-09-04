//They all the libraries which i have used in the function

import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Date;
import java.util.LinkedList;
import java.util.Queue;
import java.util.Scanner;
import java.util.TimeZone;

//My own ArrayList
class DynamicArray {
	int[] data;
	int nextIndex;

	public DynamicArray() {
		data = new int[5];
	}

	public void add(int value) {
		if (nextIndex == data.length) {
			restructure();
		}
		data[nextIndex++] = value;
	}

	public int get(int index) {
		if (index >= 0 && index < nextIndex) {
			return data[index];
		}
		return Integer.MIN_VALUE;
	}

	public void set(int index, int value) {
		if (index >= 0 && index < nextIndex) {
			data[index] = value;
		}
	}

	public boolean isEmpty() {
		return nextIndex == 0;
	}

	public int size() {
		return nextIndex;
	}

	public void print() {
		for (int i = 0; i < nextIndex; i++) {
			System.out.print(data[i] + " ");
		}
		System.out.println();
	}

	public void sort() {
		Arrays.sort(data);
	}

	public int remove() {
		if (nextIndex != 0) {
			int temp = data[--nextIndex];
			return temp;
		}
		return Integer.MIN_VALUE;
	}

	public int remove(int index) {
		if (index >= 0 && index < nextIndex) {
			int temp = data[index];
			for (int i = index; i < nextIndex - 1; i++) {
				data[i] = data[i + 1];
			}
			nextIndex--;
			return temp;
		}
		return Integer.MIN_VALUE;
	}

	private void restructure() {
		int[] temp = data;
		data = new int[temp.length * 2];
		for (int i = 0; i < temp.length; i++) {
			data[i] = temp[i];
		}
	}
}

class node {

	public void setDate(Date date) {
		SimpleDateFormat dateFormat = new SimpleDateFormat("dd-MM-yyyy HH:mm:ss");
		dateFormat.setTimeZone(TimeZone.getTimeZone("UTC"));
		dateFormat.format(date);
	}

	String data;
	int nodeNumber;
	node nodeId;
	node refernceNodeId;
	ArrayList<node> childReferenceNodeId;
	node genesisReferenceNodeId;
	String hashValue;

	public node(int nodeNumber) {
		this.nodeNumber = nodeNumber;
	}
}

public class PosistQuestionnn {

	// Question 1---This function will return genesis Node.
	// I implementd it using level order traversal of generic tree....
	public static node createGenesisNode() {

		Scanner s = new Scanner(System.in);

		System.out.println("Enter root: ");
		int rootData = s.nextInt();
		node genesisNode = new node(rootData);

		Queue<node> pendingNodes = new LinkedList<node>();
		pendingNodes.add(genesisNode);

		int sum = 0;
		while (!pendingNodes.isEmpty()) {
			node currentNode = pendingNodes.poll();

			System.out.println("Enter the children of: " + currentNode.data);
			int children = s.nextInt();

			for (int i = 1; i <= children; i++) {
				System.out.println("Enter " + i + "th child of " + currentNode.data);
				int childData = s.nextInt();
				sum += childData;
				node child = new node(childData);

				if (sum < rootData) {
					currentNode.childReferenceNodeId.add(child);
					pendingNodes.add(child);
				}

			}
		}

		return genesisNode;

	}

	// Question 2--Create set of child Nodes of a particular Node
	// This function is almost same as createGenesisNode.The only difference
	// being
	// not taking the particular node as input as it is given to us.
	public static node takeInputOfChildNodesOfParticularNode(node root) {

		Scanner s = new Scanner(System.in);

		Queue<node> pendingNodes = new LinkedList<node>();
		pendingNodes.add(root);

		while (!pendingNodes.isEmpty()) {
			node currentNode = pendingNodes.poll();

			System.out.println("Enter the children of: " + currentNode.data);
			int children = s.nextInt();

			int sum = 0;
			for (int i = 1; i <= children; i++) {
				System.out.println("Enter " + i + "th child of " + currentNode.data);
				int childData = s.nextInt();
				sum += childData;
				node child = new node(childData);

				if (sum < root.nodeNumber) {
					currentNode.childReferenceNodeId.add(child);
					pendingNodes.add(child);
				}
			}
		}

		return root;

	}

	// Question 3

	public static node createChildNode(node root) {
		Scanner s = new Scanner(System.in);

		System.out.println("Enter the childNode:");
		int childNode = s.nextInt();

		int maxValue = root.nodeNumber;

		int sumOfChildren = childNode;
		for (int i = 0; i < root.childReferenceNodeId.size(); i++) {
			sumOfChildren += root.childReferenceNodeId.get(i).nodeNumber;
		}

		if (sumOfChildren < maxValue) {
			ArrayList<node> get = root.childReferenceNodeId;
			get.add(new node(childNode));
		}

		return root;
	}

	// Question 8--Longest Chain In Genesis Node
	public static int longestChainInGenesisNode(node genesisNode) {
		if (genesisNode == null) {
			return 0;
		}

		int maxLengthTillNow = Integer.MIN_VALUE;
		for (node child : genesisNode.childReferenceNodeId) {
			int smallAns = longestChainInGenesisNode(child);
			if (smallAns > maxLengthTillNow) {
				maxLengthTillNow = smallAns;
			}
		}

		return maxLengthTillNow + 1;
	}

	// Question 4--Encrypting by owner id
	// I will be using the concept of hashCode in hashMap as it
	// converts any key value to a unique integer value
	// which would further be added to data to be encrypted
	// HashCode is a function implemented in java as of before
	// I could have implemnted it time was the constraint..If i make
	// it to the interview,i'll surely explain that

	public static String encrpytByOwnerID(String data, String ownerID) {
		int getHashCode = data.hashCode();
		return getHashCode + ownerID;
	}

	public static String encrpytByValue(String data, int value) {
		int getHashCode = data.hashCode();
		return getHashCode + value + data;
	}

	public static String encrpytByOwnerName(String data, String ownerName) {
		int getHashCode = data.hashCode();
		return getHashCode + ownerName;
	}

	// Question 9--Longest Chain Of any Particular Node;
	public static int longestChainInAnyNode(node particularNode) {
		if (particularNode == null) {
			return 0;
		}

		int maxLengthTillNow = Integer.MIN_VALUE;
		for (node child : particularNode.childReferenceNodeId) {
			int smallAns = longestChainInGenesisNode(child);
			if (smallAns > maxLengthTillNow) {
				maxLengthTillNow = smallAns;
			}
		}

		return maxLengthTillNow + 1;
	}

	// Question 10--Merge 2 nodes
	public static node mergeTwoNodes(node genesisNode, node a, node b) {
		if (a == null || b == null) {
			return null;
		}

		// update for only smaller node as mentioned in the question
		if (a.nodeNumber < b.nodeNumber) {
			int mergedSum = a.nodeNumber + b.nodeNumber;
			a.nodeNumber = mergedSum;
		}

		return genesisNode;
	}
	
	//Question 6--Edit Value oF subtree Node
	//Part 1
	public static void editValueOfNode(node genesisNode,node subTreeRoot){
		if(genesisNode==subTreeRoot){
			genesisNode.nodeNumber=genesisNode.nodeNumber*10;
		}
		
		for(node child:genesisNode.childReferenceNodeId){
			editValueOfNode(child,subTreeRoot);
		}
	}
	
	//Question 6--Edit value of leaf Node
	//Part 2
	public static void editValueOfLeafNode(node genesisNode){
		if(genesisNode.childReferenceNodeId.size()==0){
			genesisNode.nodeNumber=genesisNode.nodeNumber*10;
		}
		
		for(node child:genesisNode.childReferenceNodeId){
			editValueOfLeafNode(child);
		}
	}
	
	//Sorry,Time Over :(
	public static void main(String[] args) {
		
	}

}
