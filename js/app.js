
// Tab btn
const tabBtns = document.querySelectorAll(".tab-btn");
const articles = document.querySelectorAll(".content");

tabBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    tabBtns.forEach((btn) => {
      btn.classList.remove("active");
      const id = e.target.dataset.id;
      if (id) {
        e.target.classList.add("active");
        // hide other articles
        articles.forEach(function (article) {
          article.classList.remove("active");
        });
        const element = document.getElementById(id);
        element.classList.add("active");
      }
    });
  });
});

// Tab btn
const tabBtns2 = document.querySelectorAll(".tab-btn2");
const articles2 = document.querySelectorAll(".content2");

tabBtns2.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    tabBtns2.forEach((btn) => {
      btn.classList.remove("active");
      const id = e.target.dataset.id;
      if (id) {
        e.target.classList.add("active");
        // hide other articles
        articles2.forEach(function (article) {
          article.classList.remove("active");
        });
        const element = document.getElementById(id);
        element.classList.add("active");
      }
    });
  });
});

// Tab btn
const tabBtns3 = document.querySelectorAll(".tab-btn3");
const articles3 = document.querySelectorAll(".content3");

tabBtns3.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    tabBtns3.forEach((btn) => {
      btn.classList.remove("active");
      const id = e.target.dataset.id;
      if (id) {
        e.target.classList.add("active");
        // hide other articles
        articles3.forEach(function (article) {
          article.classList.remove("active");
        });
        const element = document.getElementById(id);
        element.classList.add("active");
      }
    });
  });
});

// Tab btn
const tabBtns4 = document.querySelectorAll(".tab-btn4");
const articles4 = document.querySelectorAll(".content4");

tabBtns4.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    tabBtns4.forEach((btn) => {
      btn.classList.remove("active");
      const id = e.target.dataset.id;
      if (id) {
        e.target.classList.add("active");
        // hide other articles
        articles4.forEach(function (article) {
          article.classList.remove("active");
        });
        const element = document.getElementById(id);
        element.classList.add("active");
      }
    });
  });
});
