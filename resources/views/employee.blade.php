<h1>Company Form</h1>
<form method="post" action="{{url('submit1')}}">
    @csrf
    <input type="text" name="name" placeholder="enter name">
    <input type="text" name="email" placeholder="enter email">
    <input type="number" name="pay" placeholder="enter pay">
    <button type="submit">add</button>
</form>
