package jp.co.internous.action;

public class HyumanName {
	public String lastName;
	private String firstName;

	public String getNmae() {
		firstName = "山田";
		lastName = "太郎";
		String myname = firstName + lastName;
		return myname;
	}

}
