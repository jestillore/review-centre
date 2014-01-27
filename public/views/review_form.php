<form action="" method="post">
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="review_form[name]" /></td>
		</tr>
		<tr>
			<td>Rating: </td>
			<td>
				<select name="review_form[rating]">
					<option value="1" selected>1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input type="email" name="review_form[email]" /></td>
		</tr>
		<tr>
			<td>Phone: </td>
			<td><input type="text" name="review_form[phone]" /></td>
		</tr>
		<tr>
			<td>Experience: </td>
			<td><textarea rows="6" name="review_form[experience]"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit Review" /></td>
		</tr>
	</table>
</form>