using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace lab3
{
    // NOTE: You can use the "Rename" command on the "Refactor" menu to change the interface name "IService1" in both code and config file together.
    [ServiceContract]
    public interface IService1
    {

        [OperationContract]
        Client GetClient(int id);

        [OperationContract]
        IEnumerable<Client> GetClients();

        [OperationContract]
        int StoreClient(Client client);

        [OperationContract]
        int UpdateClient(int id, string fio);

        [OperationContract]
        int DeleteClient(int id);

        [OperationContract]
        Service GetService(int id);

        [OperationContract]
        IEnumerable<Service> GetServices();

        [OperationContract]
        int StoreService(Service service);

        [OperationContract]
        int UpdateService(int id, string name);

        [OperationContract]
        int DeleteService(int id);

        [OperationContract]
        Order GetOrder(int id);

        [OperationContract]
        IEnumerable<Order> GetOrders();

        [OperationContract]
        int StoreOrder(Order order);

        [OperationContract]
        int UpdateOrder(int id, int client_id, int service_id, DateTime date);

        [OperationContract]
        int DeleteOrder(int id);
    }

}
