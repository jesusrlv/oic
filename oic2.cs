using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Oic
{
    #region Usr
    public class Usr
    {
        #region Member Variables
        protected int _id;
        protected string _usr;
        protected string _nombre;
        protected string _pwd;
        protected int _area;
        protected int _perfil;
        #endregion
        #region Constructors
        public Usr() { }
        public Usr(string usr, string nombre, string pwd, int area, int perfil)
        {
            this._usr=usr;
            this._nombre=nombre;
            this._pwd=pwd;
            this._area=area;
            this._perfil=perfil;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Usr
        {
            get {return _usr;}
            set {_usr=value;}
        }
        public virtual string Nombre
        {
            get {return _nombre;}
            set {_nombre=value;}
        }
        public virtual string Pwd
        {
            get {return _pwd;}
            set {_pwd=value;}
        }
        public virtual int Area
        {
            get {return _area;}
            set {_area=value;}
        }
        public virtual int Perfil
        {
            get {return _perfil;}
            set {_perfil=value;}
        }
        #endregion
    }
    #endregion
}