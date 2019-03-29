<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="s" uri="/struts-tags"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>INDEX</title>
</head>
<body>
	<s:form action="HelloStrutsAction">
		<s:submit value="HelloStruts"></s:submit>
	</s:form>
	<s:form action="WelcomeAction">
		<s:submit value="Welcome" />
	</s:form>
	<s:form action="InquiryAction">
		<s:submit value="問い合わせ" />
	</s:form>
	<br>
	<h3>新規ユーザ登録</h3>
	GET通信
	<s:form method="get" action="TestAction">
		<s:textfield name="username" label="名前：" />
		<s:password name="password" label="パスワード：" />
		<s:submit value="送信" />
	</s:form>
	POST通信
	<s:form method="post" action="TestAction">
		<s:textfield name="username" label="名前：" />
		<s:password name="password" label="パスワード：" />
		<s:submit value="送信" />
	</s:form>
</body>
</html>
