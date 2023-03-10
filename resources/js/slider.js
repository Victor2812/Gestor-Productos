class slider extends HTMLElement {
    constructor() {
        super();
        console.log('creating slider component');
    }

    async getData() {
        const response = await fetch('/most-sold');
        const data = await response.json();
        if (response.ok) {
            console.log('response ok');
            this.createSlider(data);
        } else {
            console.log('An error occurred while fetching SLIDER data');
        }
    }

    createSlider(data) {
        const shadowRoot = this.attachShadow({ mode: "open" });
        const row = document.createElement("div");
        row.className = "row mb-4";
        console.log(data);
        data.forEach(index => {
          console.log(index);
            index.forEach(data => {
                //console.log(data) // dat['name]
                let template = document.createElement("template");
                template.innerHTML = `
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
                integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
                <style>
                $primary: #81005D;

                .btn-primary {
                  background-color: #81005D;
                  border-color: #81005D;
                }
                .product-btn. btn-outline-primary {
                  background: #FFFFFF;
                  border-color: #81005D;
                }

                a.custom-card,
                a.custom-card:hover {
                  color: inherit;
                }
                
                .card {
                  background-color: white;
                  border: none;
                  border-radius: 1rem;
                  width: 100%;
                }
                
                .image-container {
                  position: relative;
                }
                
                .thumbnail-image {
                  border-radius: 1rem 1rem 0 0 !important
                }
                
                .product-price {
                  background-color: white;
                  padding: 0.25rem 0.75rem;
                  border-radius: 2rem;
                  font-weight: 600;
                }
                
                .first {
                  position: absolute;
                  width: 100%;
                  padding: 1rem;
                }
                
                .product-name {
                  font-weight: 600;
                  width: 90%;
                  white-space: nowrap;
                  text-overflow: ellipsis;
                  overflow: hidden;
                }
                
                .product-btn {
                  @extend .btn;
                  border-radius: 50%;
                  padding: 0 1rem;
                  text-transform: uppercase;
                  border-width: 0.2rem;
                  font-weight: 900;
                  font-size: 2rem;
                  color: #81005D;
                  border-color: #81005D;
                  backgorund-color: white;
                }

                .product-btn:hover {
                  color: white;
                  border-color: #81005D;
                  background-color: #81005D;
                }
                
                .product-btn:hover {
                  @extend .btn;
                  color: white:
                  border-color: #81005D;
                }

                .product-desc {
                  color: grey;
                  text-transform: capitalize;
                }
                
                .category-tag {
                  background-color: grey;
                  color: white;
                  text-transform: uppercase;
                  padding: 0.3rem 0.6rem;
                  letter-spacing: 0.05rem;
                  border-radius: 0.3rem;
                }
                </style>
                
                <div class="col-sm-6 col-md-4 mb-4">
                    <div class="card shadow mb-sm-0">
                        <div class="image-container">
                            <div class="first">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="product-price">${data['precio_base']} €</span>
                                </div>
                            </div>
                            <img src="${data['alt']}" class="img-fluid rounded thumbnail-image">
                        </div>
                        <div class="p-3">
                            <h5 class="product-name">${data['name']}</h5>
                            <p class="product-desc mb-1">${data['description']}</p>
                            <div class="d-flex justify-content-between align-items-center pt-1">
                                <span class="category-tag">most sold</span>
                                <a href="add-to-card/${data['id']}"><button class="product-btn btn-outline-primary">+</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                `;

                row.appendChild(template.content.cloneNode(true));
            })
        });
        shadowRoot.appendChild(row);
    }

    connectedCallback() {
        console.log('slider component CONNECTED');
        this.getData();
    }
}

customElements.define('slider-component', slider);