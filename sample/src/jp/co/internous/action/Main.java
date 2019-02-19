package jp.co.internous.action;

public class Main {
	public static void main(String[] args) {
		System.out.println("Hello world");
		int total = goukei(5, 3);
		System.out.println(total);

	}

	public static int goukei(int no, int num) {
		int sum = no + num;
		return sum;

	}

}
