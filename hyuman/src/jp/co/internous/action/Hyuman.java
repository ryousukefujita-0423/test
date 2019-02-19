package jp.co.internous.action;

public class Hyuman {
	public static void main(String[] args) {
		HyumanName hyumanname = new HyumanName();
		HyumanAge hyumanage = new HyumanAge();
		HyumanAddress hyumanaddress = new HyumanAddress();

		System.out.println(hyumanname.getNmae());
		System.out.println(hyumanage.getAge());
		System.out.println(hyumanaddress.getAddress());
	}

}
