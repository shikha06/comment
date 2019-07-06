using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Comment
{
    #region Reg
    public class Reg
    {
        #region Member Variables
        protected string _email;
        protected string _password;
        protected string _name;
        protected string _address;
        #endregion
        #region Constructors
        public Reg() { }
        public Reg(string email, string password, string name, string address)
        {
            this._email=email;
            this._password=password;
            this._name=name;
            this._address=address;
        }
        #endregion
        #region Public Properties
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Address
        {
            get {return _address;}
            set {_address=value;}
        }
        #endregion
    }
    #endregion
}