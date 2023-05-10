const body = document.querySelector('body');
const editWindow = body.querySelector("#edit_window");
const editFrame = body.querySelector("#edit_frame");

function openWindow(src)
{
    editWindow.classList.toggle("not_visible");
    edit_frame.setAttribute("src", src);
}

function closeWindow()
{
    editWindow.classList.toggle("not_visible");
}

function delete_part(part_id)
{
    edit_frame.setAttribute("src", "php/delete.php?partID=" + part_id.toString(10));
    location.reload();
}