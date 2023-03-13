// Create airports
CREATE (:Airport {code: "LAX", name: "Los Angeles International Airport"})
CREATE (:Airport {code: "JFK", name: "John F. Kennedy International Airport"})
CREATE (:Airport {code: "LHR", name: "London Heathrow Airport"})
CREATE (:Airport {code: "CDG", name: "Charles de Gaulle Airport"})
CREATE (:Airport {code: "HND", name: "Haneda Airport"})

CREATE (:Airport {code: "JFK", name: "John F. Kennedy International Airport", city: "New York"}),
       (:Airport {code: "LHR", name: "Heathrow Airport", city: "London"}),
       (:Airport {code: "LAX", name: "Los Angeles International Airport", city: "Los Angeles"}),
       (:Airport {code: "ORD", name: "O'Hare International Airport", city: "Chicago"}),
       (:Airport {code: "SFO", name: "San Francisco International Airport", city: "San Francisco"}),
       (:Airport {code: "FRA", name: "Frankfurt Airport", city: "Frankfurt"}),
       (:Airport {code: "YYZ", name: "Toronto Pearson International Airport", city: "Toronto"});
