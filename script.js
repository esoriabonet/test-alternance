const articlesSelectionnes = {};

function ajouterArticle() {
    const select = document.getElementById('select-article');
    const json = select.value;
    if (!json) return;

    const article = JSON.parse(json);
    const nom = article.nom_article;
    const achat = parseFloat(article.prix_achat);
    const vente = parseFloat(article.prix_vente);

    if (!articlesSelectionnes[nom]) {
        articlesSelectionnes[nom] = {
            prix_achat: achat,
            prix_vente: vente,
            quantite: 1
        };
    } else {
        articlesSelectionnes[nom].quantite += 1;
    }

    afficherTableau();
}

function afficherTableau() {
    const tbody = document.querySelector('#table-articles tbody');
    tbody.innerHTML = '';

    let totalAchat = 0;
    let totalVente = 0;

    for (const nom in articlesSelectionnes) {
        const article = articlesSelectionnes[nom];
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td>${nom}</td>
            <td>${article.prix_vente.toFixed(2)} €</td>
            <td>${article.quantite}</td>
        `;
        tbody.appendChild(tr);

        totalAchat += article.prix_achat * article.quantite;
        totalVente += article.prix_vente * article.quantite;
    }

    document.getElementById('total-achat').textContent = totalAchat.toFixed(2);
    document.getElementById('total-vente').textContent = totalVente.toFixed(2);
    document.getElementById('total-profit').textContent = (totalVente - totalAchat).toFixed(2);
}