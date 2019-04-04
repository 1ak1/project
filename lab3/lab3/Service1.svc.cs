using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace lab3
{
    // NOTE: You can use the "Rename" command on the "Refactor" menu to change the class name "Service1" in code, svc and config file together.
    // NOTE: In order to launch WCF Test Client for testing this service, please select Service1.svc or Service1.svc.cs at the Solution Explorer and start debugging.
    public class Service1 : IService1
    {
        private DataContext db = new DataContext();
        public Client GetClient(int id)
        {
           return db.Client.Find(id);           
        }
        public IEnumerable<Client> GetClients()
        {         
            return db.Client.ToList();          
        }

        public int StoreClient(Client client)
        {
            db.Client.Add(client);                    
            return db.SaveChanges();
        }

        public int UpdateClient(int id, string fio)
        {
            var updatedClient = db.Client.Find(id);
            updatedClient.fio = fio;
            return db.SaveChanges();
        }

        public int DeleteClient(int id)
        {
           db.Client.Remove(db.Client.Find(id));
           return db.SaveChanges(); 
        }

        public Service GetService(int id)
        {
            return db.Service.Find(id);
        }
        public IEnumerable<Service> GetServices()
        {
            return db.Service.ToList();
        }

        public int StoreService(Service service)
        {
            db.Service.Add(service);
            return db.SaveChanges();
        }

        public int UpdateService(int id, string name)
        {
            var updatedService = db.Service.Find(id);
            updatedService.name = name;
            return db.SaveChanges();
        }

        public int DeleteService(int id)
        {
            db.Service.Remove(db.Service.Find(id));
            return db.SaveChanges();
        }

        public Order GetOrder(int id)
        {
            return db.Order.Find(id);
        }
        public IEnumerable<Order> GetOrders()
        {
            return db.Order.ToList();
        }

        public int StoreOrder(Order order)
        {
            db.Order.Add(order);
            return db.SaveChanges();
        }

        public int UpdateOrder(int id, int client_id, int service_id, DateTime date)
        {
            var updatedOrder = db.Order.Find(id);
            updatedOrder.client_id = client_id;
            updatedOrder.service_id = service_id;
            updatedOrder.date = date;
            return db.SaveChanges();
        }

        public int DeleteOrder(int id)
        {
            db.Order.Remove(db.Order.Find(id));
            return db.SaveChanges();
        }
    }
}
