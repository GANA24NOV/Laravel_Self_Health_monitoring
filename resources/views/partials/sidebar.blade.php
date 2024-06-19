<div class="sidebar">
  <div class="logo-details">
    <i class="bx bx-Bbideal"></i>
    <span class="logo_name">novv</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="/bbideal" class="{{ request()->Is('bbideal*') ? 'active' : '' }}">
        <i class="bx bx-box"></i>
        <span class="links_name">Berat badan</span>
      </a>
    </li>
    <li>
      <a href="/mknsehat" class="{{ request()->Is('transaction*') ? 'active' : '' }}">
        <i class="bx bx-list-ul"></i>
        <span class="links_name">Makanan Sehat</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
</div>
