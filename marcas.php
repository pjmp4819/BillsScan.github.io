<?php require ('./layout/plantilla.php')?>

<style>
.dashboard-path {
    font-size: 14px;
    color: #6e6e6e;
    margin-bottom: 20px;
}

.filter-bar {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.search-bar {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    flex-grow: 1;
    margin-right: 10px;
}

.filters {
    display: flex;
    gap: 10px;
}

.filter {
    background-color: #f0f0f0;
    padding: 8px 12px;
    border-radius: 20px;
    cursor: pointer;
}

.brand-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.brand-item {
    display: flex;
    align-items: center;
    background-color: #003366;
    padding: 15px;
    border-radius: 10px;
    color: white;
}

.brand-logo {
    width: 50px;
    height: 50px;
    margin-right: 15px;
}

.brand-info {
    flex-grow: 1;
}

.brand-name {
    font-size: 20px;
    font-weight: bold;
}

.brand-files {
    font-size: 14px;
}

.brand-cost {
    text-align: right;
}

.brand-cost span {
    display: block;
}

.brand-update {
    font-size: 12px;
    color: #b0b0b0;
}

</style>
<div class="dashboard-path">
    <span>Dashboard>Categorías>Compra de Productos</span>
</div>
<div class="filter-bar">
    <input type="text" placeholder="Buscar marca" class="search-bar">
    <div class="filters">
        <span class="filter">Totalplay</span>
        <span class="filter">Apple</span>
        <span class="filter">Nike</span>
        <span class="filter">Liverpool</span>
    </div>
</div>
<div class="brand-list">
    <div class="brand-item">
        <img src="./IMAGENES/Zara_Logo.png" alt="ZARA Logo" class="brand-logo">
        <div class="brand-info">
            <span class="brand-name">ZARA</span>
            <span class="brand-files">23 archivos</span>
        </div>
        <div class="brand-cost">
            <span>5,645 MXN Deducidos</span>
            <span class="brand-update">última actualización: hace 2 días</span>
        </div>
    </div>

    <div class="brand-item">
        <img src="./IMAGENES/Nike_Logo.png" alt="Nike Logo" class="brand-logo">
        <div class="brand-info">
            <span class="brand-name">Nike</span>
            <span class="brand-files">15 archivos</span>
        </div>
        <div class="brand-cost">
            <span>7,456 MXN Deducidos</span>
            <span class="brand-update">última actualización: hace 7 días</span>
        </div>
    </div>

    <div class="brand-item">
        <img src="./IMAGENES/Totalplay_Logo.png" alt="Totalplay Logo" class="brand-logo">
        <div class="brand-info">
            <span class="brand-name">Totalplay</span>
            <span class="brand-files">32 archivos</span>
        </div>
        <div class="brand-cost">
            <span>2,352 MXN Deducidos</span>
            <span class="brand-update">última actualización: hace 4 días</span>
        </div>
    </div>
    
</div>

<?php require ('./layout/cierre_plantilla.php')?>