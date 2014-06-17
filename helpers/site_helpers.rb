module SiteHelpers

  def page_title
    title = "Modus"
    if data.page.title
      title << " | " + data.page.title
    end
    title
  end



  def page_metas
    metas = ""
    if data.page.metas
     metas = partial("/metas/"+data.page.metas)
    end
    metas
  end
  
  def page_description
    if data.page.description
      description = data.page.description
    end
    description
  end



end