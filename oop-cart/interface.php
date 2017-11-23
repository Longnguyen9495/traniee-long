<?php
interface Task{
    public function runTask();
    public function anotherMethod();
}

abstract class TaskImpl implements Task{
    public function runTask(){
        echo $this->anotherMethod();
    }
}

class TaskImpl2 extends TaskImpl{
    public function anotherMethod(){
        echo 'Xin chào!';
    }
}
$task = new TaskImpl2();
$task -> runTask();
?>
<ul>Tính chất Interface:
    <li>Interface không phải là một đối tượng.</li>
    <li>Trong interface chúng ta chỉ được khai báo phương thức chứ không được định nghĩa chúng.</li>
    <li>Trong interface chúng ta có thể khai báo được hằng nhưng không thể khai báo biến.</li>
    <li>Một interface không thể khởi tạo được (vì nó không phải là một đối tượng).</li>
    <li>Các lớp implement interface thì phải khai báo và định nghĩa lại các phương thức có trong interface đó.</li>
    <li>Một class có thể implement nhiều interface.</li>
    <li>Các interface có thể kế thừa lẫn nhau.</li>
</ul>