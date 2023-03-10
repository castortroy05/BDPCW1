CREATE (f1:Flight {number: "BA204", airline: "British Airways", departure: datetime("2023-03-07T09:00:00Z"), arrival: datetime("2023-03-07T16:30:00Z")}),
       (t3:Ticket {seat: "2A"}),
       (t4:Ticket {seat: "2B"}),
       (f1)-[:DEPARTS_FROM]->(:Airport {code: "JFK"}),
       (f1)-[:ARRIVES_AT]->(:Airport {code: "LHR"}),
       (f1)<-[:BOOKED_FOR]-(t3),
       (f1)<-[:BOOKED_FOR]-(t4),
  
       (f2:Flight {number: "DL105", airline: "Delta", departure: datetime("2023-03-08T14:45:00Z"), arrival: datetime("2023-03-09T07:30:00Z")}),
       (t5:Ticket {seat: "3A"}),
       (t6:Ticket {seat: "3B"}),
       (f2)-[:DEPARTS_FROM]->(:Airport {code: "LAX"}),
       (f2)-[:ARRIVES_AT]->(:Airport {code: "LHR"}),
       (f2)<-[:BOOKED_FOR]-(t5),
       (f2)<-[:BOOKED_FOR]-(t6),

       (f3:Flight {number: "UA202", airline: "United Airlines", departure: datetime("2023-03-10T16:00:00Z"), arrival: datetime("2023-03-11T10:30:00Z")}),
       (t7:Ticket {seat: "4A"}),
       (t8:Ticket {seat: "4B"}),
       (f3)-[:DEPARTS_FROM]->(:Airport {code: "ORD"}),
       (f3)-[:ARRIVES_AT]->(:Airport {code: "SFO"}),
       (f3)<-[:BOOKED_FOR]-(t7),
       (f3)<-[:BOOKED_FOR]-(t8),

       (f4:Flight {number: "LH201", airline: "Lufthansa", departure: datetime("2023-03-12T08:30:00Z"), arrival: datetime("2023-03-12T19:15:00Z")}),
       (t9:Ticket {seat: "5A"}),
       (t10:Ticket {seat: "5B"}),
       (f4)-[:DEPARTS_FROM]->(:Airport {code: "FRA"}),
       (f4)-[:ARRIVES_AT]->(:Airport {code: "YYZ"}),
       (f4)<-[:BOOKED_FOR]-(t9),
       (f4)<-[:BOOKED_FOR]-(t10);
