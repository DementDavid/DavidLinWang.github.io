fetch('php2.json')
  .then(response => response.json())
  .then(articles => {
    const recentArticlesContainer = document.querySelector('.recent-articles');
    const maxRecentArticles = 5;

    for (let i = 0; i < Math.min(articles.length, maxRecentArticles); i++) {
      const articleDiv = document.createElement('div');
      articleDiv.className = 'recent-article';

      const articleLink = document.createElement('a');
      articleLink.href = articles[i].link;
      articleLink.textContent = articles[i].title;
      articleDiv.appendChild(articleLink);

      const articleDate = document.createElement('p');
      articleDate.className = 'date';
      articleDate.textContent = articles[i].date;
      articleDiv.appendChild(articleDate);

      recentArticlesContainer.appendChild(articleDiv);
    }
  })
  .catch(error => console.error('JSON error:', error));
