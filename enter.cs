using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Comment
{
    #region Enter
    public class Enter
    {
        #region Member Variables
        protected int _id;
        protected string _comment;
        #endregion
        #region Constructors
        public Enter() { }
        public Enter(string comment)
        {
            this._comment=comment;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Comment
        {
            get {return _comment;}
            set {_comment=value;}
        }
        #endregion
    }
    #endregion
}