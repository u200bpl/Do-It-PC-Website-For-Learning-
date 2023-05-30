<section class="admin-navbar">
    <ul>
        <li><a class="{{ (request()->is('admin')) ? 'active' : '' }}" href="/admin"><i class="fa-solid fa-house"></i> Home</a></li>
        <li><a class="{{ (request()->is('admin/orders')) ? 'active' : '' }}" href="/admin/orders"><i class="fa-solid fa-envelope"></i> Orders</a></li>
        <li><a class="{{ (request()->is('admin/computers')) ? 'active' : '' }} {{ (request()->is('gaming-pc*')) ? 'active' : '' }}" href="/admin/computers"><i class="fa-solid fa-computer"></i> Computers</a></li>

        <li class="dropdown-btn {{ (request()->is('admin/components*')) ? 'active' : '' }}"><button><span class="fa-solid fa-wrench"></span> Components <i class="fa-solid fa-circle"></i></button></li>
        <div class="dropdown-container">
            <a class="{{ (request()->is('admin/components/cases')) ? 'active' : '' }}" href="/admin/cases">PC Cases</a>
            <a class="{{ (request()->is('admin/components/processors')) ? 'active' : '' }}" href="/admin/processors">Processors</a>
            <a class="{{ (request()->is('admin/components/graphicscard')) ? 'active' : '' }}" href="/admin/graphicscards">Graphicscards</a>
            <a class="{{ (request()->is('admin/components/motherboard')) ? 'active' : '' }}" href="/admin/motherboards">Motherboards</a>
            <a class="{{ (request()->is('admin/components/coolers')) ? 'active' : '' }}" href="/admin/coolers">Coolers</a>
            <a class="{{ (request()->is('admin/components/rams')) ? 'active' : '' }}" href="/admin/rams">Rams</a>
            <a class="{{ (request()->is('admin/components/ssds')) ? 'active' : '' }}" href="/admin/ssds">SSDs</a>
            <a class="{{ (request()->is('admin/components/hdds')) ? 'active' : '' }}" href="/admin/hdds">HDDs</a>
            <a class="{{ (request()->is('admin/components/powersupplies')) ? 'active' : '' }}" href="/admin/powersupplies">Powersupplies</a>
        </div>

        <li class="dropdown-btn {{ (request()->is('admin/components*')) ? 'active' : '' }}"><button><span class="fa-solid fa-gauge"></span> Performance <i class="fa-solid fa-circle"></i></button></li>
        <div class="dropdown-container">
            <a class="{{ (request()->is('admin/components/cases')) ? 'active' : '' }}" href="/admin/cases">Games</a>
            <a class="{{ (request()->is('admin/components/processors')) ? 'active' : '' }}" href="/admin/processors">Performance</a>
        </div>

        <li><a class="{{ (request()->is('admin/users')) ? 'active' : '' }}" href="/admin/users"><i class="fa-solid fa-user"></i> Users</a></li>
    </ul>
</section>

<style>
.admin-navbar ul {
    z-index: 998;
    list-style-type: none;
    margin: 89px 0 0 0;
    padding: 0;
    width: 10%;
    background-color: var(--secondary);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position: fixed;
    height: 100%;
    overflow: auto;
}

.admin-navbar li a {
    display: block;
    color: var(--tertiary);
    padding: 8px 16px;
    text-decoration: none;
    font-size: var(--font-size-a);
    border-radius: 10px;
    margin: 15px;
}

.admin-navbar li a.active {
    background-color: var(--primary);
    color: var(--tertiary);
}

.admin-navbar li a:hover:not(.active) {
    background-color: rgba(var(--primary-rgb), 0.5);
}

.admin-navbar .dropdown-btn {
    margin: 15px;
}

.admin-navbar li button {
    width: 100%;
    text-align: left;
    background-color: transparent;
    border: none;
    color: var(--tertiary);
    padding: 12px 18px;
    font-size: var(--font-size-a);
    border-radius: 10px;
    font-weight: 500;
    margin-bottom: -15px;
}

.admin-navbar li button:hover {
    cursor: pointer;
    background-color: rgba(var(--primary-rgb), 0.5);
    color: var(--tertiary);
}

.admin-navbar li button i {
    float: right;
    margin-top: 8px;
    font-size: 5px;
}

.admin-navbar .dropdown-container {
    display: none;
    padding-left: 8px;
    flex-direction: column;
}

.admin-navbar .dropdown-container a {
    color: var(--tertiary);
    padding: 4px 18px;
    margin: 0 25px;
    text-decoration: none;
    display: block;
    font-size: var(--font-size-a);
    border-left: 2px solid var(--grey-dark);
}

.admin-navbar .dropdown-container a:hover {
    color: var(--primary);
    border-left: 2px solid var(--primary);
}

.admin-navbar .active button i {
    color: var(--primary);
}
</style>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content */
var dropdown = document.getElementsByClassName("dropdown-btn");
var icon = document.getElementsByClassName("fa-circle");

var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;

        if (dropdownContent.style.display === "flex") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "flex";
        }
    });
}
</script>