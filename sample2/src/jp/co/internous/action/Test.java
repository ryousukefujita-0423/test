package jp.co.internous.action;

public class Test {
	public static void main(String[] args) {
		Person person1 = new Person();
		person1.name = "木村次郎";
		person1.age = 18;
		person1.phoneNumber = "000-1111-2222";
		person1.address = "東京";
		System.out.println(person1.name);
		System.out.println(person1.age);
		System.out.println(person1.phoneNumber);
		System.out.println(person1.address);
		person1.talk();
		person1.walk();
		person1.run();

		System.out.println();

		Person person2 = new Person();
		person2.name = "鈴木花子";
		person2.age = 16;
		person2.phoneNumber = "333-4444-5555";
		person2.address = "大阪";
		System.out.println(person2.name);
		System.out.println(person2.age);
		System.out.println(person2.phoneNumber);
		System.out.println(person2.address);
		person2.talk();
		person2.walk();
		person2.run();

		System.out.println();

		Robot aibo = new Robot();
		aibo.name = "アイボ";
		aibo.talk();
		aibo.walk();
		aibo.run();

		System.out.println();

		Robot asimo = new Robot();
		asimo.name = "アシモ";
		asimo.talk();
		asimo.walk();
		asimo.run();

		System.out.println();

		Robot pepper = new Robot();
		pepper.name = "ペッパー";
		pepper.talk();
		pepper.walk();
		pepper.run();

	}

}
