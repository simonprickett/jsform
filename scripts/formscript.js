function goToPage()
{
    var index = document.forms["linkform"]["dropdown"].selectedIndex;
    var url = document.forms["linkform"]["dropdown"].options[index].value;
    window.location = url;
}
