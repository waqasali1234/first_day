<h1>Company Form</h1>
<form method="post" action="{{url('submit')}}">
    @csrf
    <input type="text" name="name" placeholder="enter name">
    <input type="text" name="product" placeholder="enter product">
    <input type="text" name="item" placeholder="enter item">
    <input type="text" name="pakages" placeholder="enter pakages">
    <button type="submit">add</button>
</form>
