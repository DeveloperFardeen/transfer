<?php
$menuItems = [
    ["href" => "index.php", "icon" => "dashboard", "label" => "Dashboard"],
    ["href" => "create.php", "icon" => "auto_stories", "label" => "Create New"],
    ["href" => "albums", "icon" => "book_4", "label" => "All Flipix"],
    ["href" => "recharge.php", "icon" => "account_balance_wallet", "label" => "Recharge"],
    ["href" => "#", "icon" => "reviews", "label" => "Feedback", "extra_class" => "feedback-designed-btn"]
];
?>

<ul class="nav-list primary-nav">
    <?php foreach ($menuItems as $item): ?>
        <li class="nav-item">
            <a href="<?php echo htmlspecialchars($item['href']); ?>" class="nav-link <?php echo $item['extra_class'] ?? ''; ?>">
                <span class="nav-icon material-symbols-rounded"><?php echo htmlspecialchars($item['icon']); ?></span>
                <span class="nav-label"><?php echo htmlspecialchars($item['label']); ?></span>
            </a>
            <span class="nav-tooltip"><?php echo htmlspecialchars($item['label']); ?></span>
        </li>
    <?php endforeach; ?>
</ul>
